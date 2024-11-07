import React from "react";
import {Button} from "@headlessui/react";
import { Link } from '@inertiajs/inertia-react';

const ToDo = ({ todo, userId, toDoId }) => {
    const listStyle = {
        listStyleType: 'none',
        padding: 0,
        border: '1px solid #ddd',
        borderRadius: '8px',
        backgroundColor: '#f6f7f9',
        margin: '20px',
    };

    console.log(userId)
    console.log(toDoId)

    return (
        <div>
            <div>
                <div style={listStyle}>
                    <strong>Título: {todo.title}</strong>
                    <h2>Descrição: {todo.description}</h2>
                    <p>Completo: {todo.completed ? 'Completed' : 'Pending'}</p>

                    <div>
                        <Link href={`/user/${userId}/todos/${toDoId}`}>
                            Detalhes
                        </Link>
                    </div>

                    <div>
                        <Link href={`/user/${userId}/todos`}>
                            Voltar
                        </Link>
                    </div>
                    <div>
                        <Button>
                            <Link href={`/user/${userId}/todos/${toDoId}/edit`}>
                                Editar
                            </Link>
                        </Button>
                    </div>
                    <div>
                        <Button>
                            <Link href={`/user/${userId}/todos/${toDoId}/delete`} method={'delete'}>
                                Excluir
                            </Link>
                        </Button>
                    </div>
                </div>
            </div>
        </div>
    );
};

export default ToDo
