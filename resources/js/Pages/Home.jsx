import React from "react";
import {Head, Link} from "@inertiajs/react";
import PrimaryButton from "@/Components/PrimaryButton.jsx";
import GuestLayout from "@/Layouts/GuestLayout.jsx";

const Home = () => {

    return (
        <GuestLayout>
            <Head title="Home" />
            <div>
                <h1> Bem Vindo para a sua lista de afazeres virtual</h1>
                <p>Por favor, faça seu login ou registre-se nos botões abaixo:</p>
                <div className="mt-6">
                    <PrimaryButton>
                        <Link href={route('login')}>
                            Login
                        </Link>
                    </PrimaryButton>
                </div>
                <div className="mt-6">
                    <PrimaryButton>
                        <Link href={route('register')}>
                            Registre-se
                        </Link>
                    </PrimaryButton>
                </div>
            </div>
        </GuestLayout>
    )
}

export default Home
