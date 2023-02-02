const {
    restart
} = require("nodemon");
const Song = require("../models/song");

async function createSong(req, res) {
    const song = new Song();
    const params = req.body;


    song.titulo = params.titulo;
    song.grupo = params.grupo;
    song.duracion = params.duracion;
    song.anio = params.anio;
    song.genero = params.genero;
    song.puntuacion = params.puntuacion;


    song.description = params.description;

    try {
        //insertar en mogodb
        const songStore = await song.save();

        if (!songStore) {
            restart.status(400).send({
                msg: "tarea no guardada"
            })
        } else {
            res.status(200).send({
                cancion: songStore
            });
        }
    } catch (error) {
        res.status(500).send(error);

    }
}
async function getSongs(req, res) {
    try {
        const songs = await Song.find();
        if (!songs) {
            res.status(400).send("error al obtener las tareas.");
        } else {
            res.status(200).send(songs);
        }
    } catch (error) {
        restart.status(500).send(error);
    }
}


async function deleteSongs(req, res) {
    const idTask = req.params.id;
    try {
        const task = await Task.deleteOne({ _id: idTask });
        //const task = await Task.findByIdAndDelete(idTask);
        if (!task) {
            res.status(400).send("error al obtener las tareas.");
        } else {
            res.status(200).send("tarea borrada");
        }
    } catch (error) {
        res.status(500).send(error);
    }
}

async function updateSong(req, res) {
    const idTask = req.params.id;
    const cuerpo = req.body;
    try {
        const task = await Task.findByIdAndUpdate(idTask, cuerpo);
        //const task = await Task.findByIdAndDelete(idTask);
        if (!task) {
            res.status(400).send("no se ha podido modificar.");
        } else {
            res.status(200).send("tarea modificada");
        }
    } catch (error) {
        res.status(500).send(error);
    }

}
module.exports = {
    createSong,
    getSongs,
    deleteSongs,
    updateSong,
}