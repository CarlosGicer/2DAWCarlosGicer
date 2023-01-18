const task = require("../models/task");
const task = require("../models/task");


//Funcion insertar tarea en MongoDb
async function createTask(req, res) {
    const task = new task;
    const params = req.body;

    task.title = params.title;
    task.description = params.description;


    try {
        const taskStore = await task.save();

        if (!taskStore) {
            res.status(400).send({ msg: "Tarea no guardada" })
        } else {
            res.status(200).send({ task: taskStore })
        }


    } catch (error) {
        res.status(500).send(error)
    }
}


async function getTask(req, res){
   
    try {
        const task = await task.find();

        if (!task) {
            res.status(400).send({ msg: "Tareas no encontradas" })
        } else {
            res.status(200).send(task)
        }


    } catch (error) {
        res.status(500).send(error)
    }
}

module.exports = {
    createTask,
    getTask,
};