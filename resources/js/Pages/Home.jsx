import React from "react";
import { Link } from "@inertiajs/react";
import PrimaryButton from "@/Components/PrimaryButton.jsx";
import { usePage } from "@inertiajs/react";

const Home = () => {
    const { props } = usePage();
    const user = props.auth.user;

    return (
        <div>
            <h1> Bem Vindo a sua lista de afazeres</h1>
            {
                user ? (<p>{user.name}</p>) : (<p>sem usuário</p>)
            }
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
