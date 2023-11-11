// SupplierTable.jsx
import React from 'react';
import './tablas.css'; 

function SupplierTable({ suppliers }) {
  return (
    <div>
      <h4>Suppliers</h4>
      <table className="product-table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
          </tr>
        </thead>
        <tbody>
          {suppliers.map((supplier) => (
            <tr key={supplier.id}>
              <td>{supplier.id}</td>
              <td>{supplier.name}</td>
            </tr>
          ))}
        </tbody>
      </table>
    </div>
  );
}

export default SupplierTable;
