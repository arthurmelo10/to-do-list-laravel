import React from "react";

const Home = ({ user }) => {
    return (
        <div>
            <h1> Bem Vindo a sua lista de afazeres</h1>
            <p>Usuário autenticado: {user.name}</p>
        </div>
    )
}

export default Home
