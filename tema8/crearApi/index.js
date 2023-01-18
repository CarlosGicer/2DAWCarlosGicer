const mongoose = require("mongoose");
const app = require("./app");
const port = 3000
const urlMongoDb = "mongodb+srv://CarlosGicer:yBxNZg2rhvRLkjM2@cluster0.t2cczmv.mongodb.net/test"

mongoose.set("strictQuery", false)

mongoose.connect(urlMongoDb, {
  useNewUrlParser: true,
  userUnifiedTopology: true
}, (err, res) => {
  try {

    if (err) {

      throw err

    } else {

      console.log("Conectado a Mongo, OK")

      //Servidor web Node.js
      app.listen(port, () => {
        console.log(`Example app listening on port ${port}`)
      })

    }

  } catch (err) {
    console.error(err);
  }
})