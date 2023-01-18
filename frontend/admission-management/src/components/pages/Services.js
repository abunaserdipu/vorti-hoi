import React, { useState, useEffect } from "react";
import axios from "axios";
import { Link } from "react-router-dom";
export default function Services() {
  const [services, setServices] = useState([]);

  useEffect(() => {
    getServices();
  }, []);

  const getServices = async () => {
    const services = await axios.get(
      "http://localhost:8080/frontend/frontendController/services"
    );
    setServices(services.data);
  };
  const http = "http://localhost:8080/";
  //   const deleteProduct = async (id) => {
  //     await axios.delete(`http://localhost:8080/frontend/services/${id}`);
  //     getServices();
  //   };
  console.log(services);
  return (
    <div className="container-fluid" style={{ height: "100vh" }}>
      <h1 className="text-center fw-bold mb-5">Services</h1>
      <div>
        {/* <Link to="/add" className="btn btn-primary">
          Add New
        </Link> */}
        <div className="row m-0 p-0">
          {services.map((service) => (
            <div className="col-md-3" key={service.id}>
              <div className="card" style={{ width: "18rem;" }}>
                <img
                  src={http + service.circular_image}
                  className="card-img-top"
                  alt="circular"
                />
                <div className="card-body">
                  <h5 className="card-title fw-bold">{service.school_name}</h5>
                  <p className="card-text">
                    {service.circular_details.substring(0, 100)}...
                    <Link
                      to={service.id}
                      className="text-decoration-none text-muted"
                    >
                      see details
                    </Link>
                  </p>
                  <a
                    href="http://localhost:8080/frontend/studentController"
                    className="btn btn-primary"
                  >
                    Admission
                  </a>
                </div>
              </div>
            </div>
          ))}
        </div>
        {/* <table className="table is-striped is-fullwidth">
          <thead>
            <tr>
              <th>SN</th>
              <th>Product Image</th>
              <th>Product Name</th>
              <th>Price</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            {services.map((product, index) => (
              <tr key={product.id}>
                <td>{index + 1}</td>
                <td>
                  <img src={http + product.product_image} alt="product" />
                </td>
                <td>{product.product_name}</td>
                <td>{product.product_price}</td>
                <td>
                  <Link to={`/edit/${product.id}`} className="btn btn-success">
                    Edit
                  </Link>
                  <button
                    onClick={() => deleteProduct(product.id)}
                    className="btn btn-danger"
                  >
                    Delete
                  </button>
                </td>
              </tr>
            ))}
          </tbody>
        </table> */}
      </div>
    </div>
  );
}
