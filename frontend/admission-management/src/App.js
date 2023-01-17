import { BrowserRouter, Routes, Route } from "react-router-dom";
import About from "./components/pages/About";
import Home from "./components/pages/Home";
import Static from "./components/static/Static";
function App() {
  return (
    <BrowserRouter>
      <Routes>
        <Route path="/" element={<Static />}>
          <Route index element={<Home />} />
          <Route path="/about" element={<About />} />
        </Route>
      </Routes>
    </BrowserRouter>
  );
}

export default App;
