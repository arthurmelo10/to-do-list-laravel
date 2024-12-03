import React from "react";
import {Button} from "@headlessui/react";
import { Link } from '@inertiajs/inertia-react';
import DangerButton from "@/Components/DangerButton.jsx";
import NavLink from "@/Components/NavLink.jsx";

const ToDo = ({ todo, userId, toDoId }) => {
    const listStyle = {
        listStyleType: 'none',
        padding: 0,
        border: '1px solid #ddd',
        borderRadius: '8px',
        backgroundColor: '#f6f7f9',
        margin: '20px',
    };

    return (
        <div>
            <div>
                <div style={listStyle}>
                    <strong>Título: {todo.title}</strong>
                    <h2>Descrição: {todo.description}</h2>
                    <p>Completo: {todo.completed ? 'Completed' : 'Pending'}</p>

                    <div>
                        <NavLink>
                            <Link href={`/user/${userId}/todos/${toDoId}`}>
                                Detalhes
                            </Link>
                        </NavLink>
                    </div>

                    <div>
                        <NavLink>
                            <Link href={`/user/${userId}/todos`}>
                                Voltar
                            </Link>
                        </NavLink>
                    </div>
                    <div>
                        <Button>
                            <Link href={`/user/${userId}/todos/${toDoId}/edit`}>
                                Editar
                            </Link>
                        </Button>
                    </div>
                    <div>
                        <DangerButton>
                            <Link href={`/user/${userId}/todos/${toDoId}/delete`} method={'delete'}>
                                Excluir
                            </Link>
                        </DangerButton>
                    </div>
                </div>
            </div>
        </div>
    );
};

export default ToDo
