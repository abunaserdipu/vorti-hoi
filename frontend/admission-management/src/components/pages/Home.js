import React from "react";
import Slider from "../includes/Slider";
import About from "./About";
import Services from "./Services";

export default function Home() {
  return (
    <div>
      <Slider />
      <About />
      <Services />
    </div>
  );
}
