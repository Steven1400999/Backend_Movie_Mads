import React, { useEffect, useState } from 'react';
import ReactDOM from 'react-dom/client';
import { Button, Card, Stack, Spinner, Container, Row } from 'react-bootstrap';
import UserItem from './UserItem';
import axios from 'axios';
import { useNavigate } from "react-router-dom";


function ListCards() {
    const [userData, setUserData] = useState({})
    const navigate = useNavigate();
    const token = sessionStorage.getItem("token");
    const id_rol = sessionStorage.getItem("id_rol");


    useEffect(() => {
        if (!token) {
            navigate("/Proyecto_Inventario/public/"); 
          }
          if(id_rol != 1){
            navigate("/Proyecto_Inventario/public/Employee");
    
          }
    
        const getUsers = async () => {
            await axios.get("http://localhost/Proyecto_Inventario/public/api/user_index")
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
