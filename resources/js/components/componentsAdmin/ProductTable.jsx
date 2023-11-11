// ProductTable.jsx
import React from 'react';
import './tablas.css'; 

function ProductTable({ products }) {
  return (
    <>
      <h4>Products</h4>
      <table className="product-table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
          </tr>
        </thead>
        <tbody>
          {products.map((product) => (
            <tr key={product.id}>
              <td>{product.id}</td>
              <td>{product.name}</td>
            </tr>
          ))}
        </tbody>
      </table>
    </>
  );
}

export default ProductTable;
