const Task = require("../models/task");


//Funcion insertar tarea en MongoDb
async function createTask(req, res) {
    const task = new Task;
    const params = req.body;

    task.title = params.title;
    task.description = params.description;


    try {
        const taskStore = await Task.save();

        if (!taskStore) {
            res.status(400).send({ msg: "Tarea no guardada" })
        } else {
            res.status(200).send({ task: taskStore })
        }


    } catch (error) {
        res.status(500).send(error)
    }
}

//Funcion sacar todas las tareas
async function getTasks(req, res) {

    try {
        const task = await Task.find();

        if (!task) {
            res.status(400).send({ msg: "Tareas no encontradas" })
        } else {
            res.status(200).send(task)
        }


    } catch (error) {
        res.status(500).send(error)
    }
}

//Funcion sacar una tarea por ID
async function getTask(req, res) {

    const idTask = req.params.id;

    try {
        const task = await Task.find(idTask);

        if (!task) {
            res.status(400).send({ msg: "Tarea no encontradas" })
        } else {
            res.status(200).send(task)
        }


    } catch (error) {
        res.status(500).send(error)
    }
}

//Funcion eliminar una tarea por ID
async function deleteTask(req, res) {

    const idTask = req.params.id;

    try {
        const task = await Task.findByIdAndDelete(idTask);

        if (!task) {
            res.status(400).send({ msg: "Tarea no encontradas" })
        } else {
            res.status(200).send(task)
        }


    } catch (error) {
        res.status(500).send(error)
    }
}

//Modificar tarea por ID
async function updateTask(req, res) {

    const idTask = req.params.id;
    const paramsBody = req.body;

    try {
        const task = await Task.findByIdAndUpdate(idTask, paramsBody);

        if (!task) {
            res.status(400).send({ msg: "Tarea no encontrada para modificar" })
        } else {
            res.status(200).send(task)
        }


    } catch (error) {
        res.status(500).send(error)
    }
}

module.exports = {
    createTask,
    getTasks,
    getTask,
    deleteTask,
    updateTask,
};