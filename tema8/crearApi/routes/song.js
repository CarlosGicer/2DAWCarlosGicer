const express = require('express');
const SongController = require("../controladores/song")
const md_auth = require('../middleware/authenticated');
const api = express.Router();

//Endpoints
api.post("/song",SongController.createSong);
api.get("/song", [md_auth.ensureAuth] , SongController.getSongs);


module.exports = api;