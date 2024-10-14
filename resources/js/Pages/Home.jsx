import React from "react";
import { Link } from "@inertiajs/react";

const Home = () => {
    return (
        <div>
            <h1> Bem Vindo a sua lista de afazeres</h1>
            <p>Por favor, faça seu login ou registre-se nos links abaixo</p>
            <div>
                <Link href={"/login"}>
                    <button>Login</button>
                </Link>
            </div>
            <div>
                <Link href={"/register"}>
                    <button>Registre-se</button>
                </Link>
            </div>
        </div>
    )
}

export default Home
