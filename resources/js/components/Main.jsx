import React from "react";
import Card_C from "./Card_C";
import ListCards from "./ListCards";
import Menu from "./Menu";
import Login from "./Login";
import { Navigate, Routes, Route } from "react-router-dom";
import { useState, useEffect } from "react";





function Main() {
   
    const [userRolId, setUserRolId] = useState(null);

    const adminComponents = (
        <>
            <Route path="listcards" element={<ListCards />} />
            {/* Otros componentes para administradores */}
        </>
    );

    const userComponents = (
        <>
            <Route path="card" element={<Card_C />} />
            {/* Otros componentes para usuarios normales */}
        </>
    );
    useEffect(() => {
        
    }, []);

    return(
        <Routes>
        <Route path="/proyecto_inventario/public/" element={<Login setUserRolId={setUserRolId} />} />

    
        {userRolId === 1 ? adminComponents : userComponents}



      </Routes>
    );
  }
  
  export default Main;