import React from "react";

export default function About() {
  return (
    <div className="container-fluid" style={{ height: "100vh" }}>
      <h1 className="text-center fw-bold mb-5">About Us</h1>
      <div className="row m-0 p-0">
        <div className="col-md-6">
          <img src="assets/images/about-us.jpg" style={{ width: "100%" }} />
        </div>
        <div className="col-md-6 d-flex align-items-center">
          <p className="fs-5">
            It's a Admission Management website, Where you can find most of the
            school inside Dhaka admission process & support. The benefit of this
            website is here you can find your suitable school admission form &
            all the process of admission, no need to take third party help. It's
            save you from hassle of traffic jam and valuable time!
          </p>
        </div>
      </div>
    </div>
  );
}
