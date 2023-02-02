const User = require("../models/user");
const bcryptjs = require("bcryptjs");
const jwt = require("../services/jwt");

//Funcion insertar tarea en MongoDb
async function register(req, res) {

    const user = new User();
    const params = req.body;
    //otra forma de hacer
    //const {name,lastName,email,password} =  req.body;
    //user.name = name;


    try {
        if (!params.password) throw { msg: "Debes introducir una contraseña" };
        const salt = await bcryptjs.genSalt(10);

        user.name = params.name;
        user.lastname = params.lastname;
        user.email = params.email;
        user.password = await bcryptjs.hash(params.password, salt);


        //comprobar que el email ya es esta registrado en la bd
        const foundEmail = await User.findOne({ email: params.email });
        if (foundEmail) throw { msg: "Email ya registrado" };

        //inserta e mongodb
        const userStore = await user.save();

        if (!userStore) {
            res.status(400).send({ msg: "Usuario no guardada correctamente, datos erroneos" });
        } else {
            res.status(200).send({ msg: userStore });
        }
    } catch (error) {
        res.status(500).send(error);
    }

}

//Funcion logear
async function login(req, res) {
    const { email, password } = req.body

    try {

        const user = await User.findOne({ email });
        if (!user) throw { msg: "Email o contraseña incorrecta" };

        const passwordSuccess = await bcryptjs.compare(password, user.password);

        if (!passwordSuccess) throw { msg: "Email o contraseña incorrecta" };

        res.status(200).send({ token: jwt.createToken(user, "12h") });


    } catch (error) {
        res.status(500).send(error)
    }

}


module.exports = {
    register,
    login,
};