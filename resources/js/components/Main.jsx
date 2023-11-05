import React from "react";
import Card_C from "./Card_C";
import ListCards from "./ListCards";
import Menu from "./Menu";
import Login from "./Login";
import { Navigate, Routes, Route } from "react-router-dom";
import { useState, useEffect } from "react";





function Main() {

    return (
        <Routes>

            <Route path="/proyecto_inventario/public/" element={<Login setUserRolId={setUserRolId} />} />




        </Routes>
    );
}

export default Main;