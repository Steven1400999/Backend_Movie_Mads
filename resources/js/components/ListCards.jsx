import React, { useState, useEffect, useContext } from 'react';
import ReactDOM from 'react-dom/client';
import { Button, Card, Stack, Spinner, Container, Row } from 'react-bootstrap';
import UserItem from './UserItem';
import axios from 'axios';
import { useNavigate } from "react-router-dom";
import { Context } from '../Context';


function ListCards() {
    const [userData, setUserData] = useState({})
    const navigate = useNavigate();
    const { token, rol_id } = useContext(Context);

    useEffect(() => {

        const getUsers = async () => {
            await axios.get("http://localhost/Proyecto_Inventario/public/api/user_index",
                {
                    headers: {
                        'Content-Type': 'application/json',
                        Authorization: `Bearer ${token}`,
                    },
                }
            )
                .then(function (response) {
                    console.log(userData);
                    setUserData(response.data)
                })
                .catch(function (error) {
                    // manejar error
                    console.log(error);
                })
                .finally(function () {
                    // siempre sera executado
                });

        }
        getUsers()
    }, [])


    function showstoreform() {
        navigate("/Proyecto_Inventario/public/Admin/user_store_form");
    }




    if (!userData.length) return
    <Spinner animation="border" role="status">
        <span className="visually-hidden">Loading...</span>
    </Spinner>

    return (
        <>

            <Button variant="warning" onClick={showstoreform}>Create a user</Button>

            <hr />
            <Container fluid>
                <Row className="gap-6">
                    {userData.map((user) => (
                        <UserItem key={user.id}
                            id={user.id}
                            name={user.name}
                            email={user.email}
                            rol_id={user.rol_id} />

                    ))}
                </Row>
            </Container>
        </>
    );
}


export default ListCards;
