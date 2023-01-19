const express = require("express");
const TaskController = require("../controladores/task");

const api = express.Router();

//EndPoints


//Crear tareas
api.post("/task", TaskController.createTask);

//Consultar todas las tareas
api.post("/task", TaskController.getTasks);

//Consultar una tarea 
api.get("/task/:id", TaskController.getTask);

//Borrar tarea por ID
api.delete("/task/:id", TaskController.deleteTask);

//Modificar tarea por ID
api.put("/task/:id",TaskController.updateTask);

module.exports = api;
  