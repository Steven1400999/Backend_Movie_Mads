import React, { useEffect, useState } from 'react';
import ReactDOM from 'react-dom/client';
import { Button, Card, Stack, Spinner } from 'react-bootstrap';
import Card_C from './Card_C';
import axios from 'axios';

function ListCards() {
    const[userData, setUserData]=useState({})
    useEffect(()=>{
        const getUsers = async() =>{
            await axios.get("http://localhost/Proyecto_Inventario/public/api/user_index")
            .then(function(response){
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
    },[])

    if (!userData.length) return
        <Spinner animation="border" role="status">
        <span className="visually-hidden">Loading...</span>
        </Spinner>

    return (
        <>
        {userData.map((user)=>(
        <Card_C id={user.id}  name={user.name} email={user.email} rol_id={user.rol_id} />
        ))}


        </>
    );
}

export default ListCards;
