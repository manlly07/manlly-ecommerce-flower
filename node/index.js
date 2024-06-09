var express = require('express');
const cors = require('cors');
const multer = require('multer');
var app = express();
app.use(cors());

app.use(express.json());
app.use(express.urlencoded({ extended: false }));

const axios = require("axios");
const fs = require("fs");

// const image = fs.readFileSync("rose.png", {
//     encoding: "base64"
// });
const storage = multer.diskStorage({
    destination: (req, file, cb) => {
      cb(null, 'uploads/');
    },
    filename: (req, file, cb) => {
      cb(null, file.originalname);
    }
  });
  
const upload = multer({ storage: storage });

app.post('/ai', upload.single('image'), (req, res) => {
    if (!req.file) {
        return res.status(400).json({ error: 'No file uploaded' });
    }
    const imagePath = req.file.path;
    const imageBase64 = fs.readFileSync(imagePath, 'base64');

    // res.json({ imageBase64 });

    axios({
        method: "POST",
        url: "https://classify.roboflow.com/227-yc1vm/1",
        params: {
            api_key: "Ai5rEJqLo8fp6roMw0Jp"
        },
        data: imageBase64,
        headers: {
            "Content-Type": "application/json"
        }
    })
    .then(function (response) {
        res.status(200).json({
            data: response.data
        });
        // console.log(response);
    });
});
app.listen(8080, function () {
    console.log('App is running on port 3000');
});