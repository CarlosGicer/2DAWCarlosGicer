const express = require("express");
const TaskController = require("../controladores/task");

const api = express.Router();

//EndPoints


//Crear tareas
api.post("/task", TaskController.createTask);


//Consultar todas las tareas
api.post("/task", TaskController.getTask);

module.exports = {
    createTask
};