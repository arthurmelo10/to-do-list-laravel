import React from "react";
import { Link } from "@inertiajs/react";
import PrimaryButton from "@/Components/PrimaryButton.jsx";

const Home = () => {
    return (
        <div>
            <h1> Bem Vindo a sua lista de afazeres</h1>
            <p>Por favor, faça seu login ou registre-se nos botões abaixo</p>
            <div>
                <PrimaryButton>
                    <Link href={route('login')}>
                        Login
                    </Link>
                </PrimaryButton>
            </div>
            <div>
                <PrimaryButton>
                    <Link href={route('register')}>
                        Registre-se
                    </Link>
                </PrimaryButton>
            </div>
        </div>
    )
}

export default Home
