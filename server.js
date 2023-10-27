const http = require("http");
const express = require("express");
const socketIo = require("socket.io");

const app = express();
const server = http.createServer(app);
const io = socketIo(server);

io.on("connection", (socket) => {
    console.log("Um usuário se conectou");

    socket.on("message", (data) => {
        io.emit("message", data); // Envia a mensagem para todos os usuários conectados
    });

    socket.on("disconnect", () => {
        console.log("Um usuário desconectou");
    });
});

server.listen(3000, () => {
    console.log("Servidor está ouvindo na porta 3000");
});
