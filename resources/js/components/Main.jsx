import React from "react";
import Card_C from "./Card_C";
import ListCards from "./ListCards";
import Menu from "./Menu";
import Login from "./Login";
import Admin from "./Admin";
import Employee from "./Employee";


import { Navigate, Routes, Route } from "react-router-dom";
import { useState, useEffect } from "react";





function Main() {

    return (
        <Routes>


            <Route path="/Proyecto_Inventario/public/" element={<Login/>} />



            <Route path="/Proyecto_Inventario/public/Admin/" element={<Admin/>} />
            <Route path="/Proyecto_Inventario/public/Employee/" element={<Employee/>} />


        </Routes>
    );
}

export default Main;