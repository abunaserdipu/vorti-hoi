import React from "react";

export default function Footer() {
  return (
    <div className="row bg-black text-white m-0 p-0">
      <div className="col-md-4 mt-3">
        <h5>Address</h5>
        <hr style={{ width: "50%", marginTop: "0" }} />
        <p>
          IDB Bhaban (4th Floor) E/8-A,
          <br />
          Rokeya Sharani, Sher-e-Bangla Nagar. <br />
          Dhaka-1207, Bangladesh
        </p>
        <p>Phone: +880 2 9183006</p>
        <p>Email: idbb@isdb-bisew.org</p>
        <p>Fax: +880 2 9183001 - 2</p>
      </div>
      <div className="col-md-4 mt-3">
        <h5>Important Links</h5>
        <hr style={{ width: "50%", marginTop: "0" }} />
        <a
          href="doctor_login.php"
          style={{ textDecoration: "none", color: "bisque" }}
        >
          School Login
        </a>
        <br />
        <a
          href="patient_login.php"
          style={{ textDecoration: "none", color: "bisque" }}
        >
          Student Login
        </a>
      </div>
      <div className="col-md-4 mt-3">
        <h5>Connect</h5>
        <hr style={{ width: "50%", marginTop: "0" }} />
        <i className="fa-br/ands fa-square-facebook fa-2xl p-3"></i>
        <i className="fa-br/ands fa-square-twitter fa-2xl p-3"></i>
        <i className="fa-br/ands fa-linkedin fa-2xl p-3"></i>
      </div>
      <div className="fs-5 text-center">
        <p>
          All rights reserved by &copy; <strong>Abu Naser Dipu</strong>
        </p>
      </div>
    </div>
  );
}
