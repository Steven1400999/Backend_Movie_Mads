import React, { createContext, useState } from 'react';

const Context = createContext();

const ContextProvider = ({ children }) => {
  const [token, setToken] = useState();
  const [rol_id, setRol_id] = useState();


  const setGlobalToken = (value) => {
    setToken(value);
  };

  const setGlobalRol_id = (value) => {
    setRol_id(value);
  };


  return (
    <Context.Provider value={{ token, rol_id, setGlobalToken, setGlobalRol_id }}>
      {children}
    </Context.Provider>
  );
};

export { Context, ContextProvider };