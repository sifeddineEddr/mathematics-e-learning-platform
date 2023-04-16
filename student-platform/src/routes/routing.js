import React from "react";
import { Routes, Route } from "react-router-dom";
import Home from "../pages/home";
import Landing from "../pages/landing";
import LessonsBoard from "../pages/lessonsBoard";
import Login from "../pages/login";

export default function Routing() {
  return (
    <Routes>
      <Route path="/" element={<Landing />} />
      <Route path="login" element={<Login />} />
      <Route path="home" element={<Home />} />
      <Route path="lessons" element={<LessonsBoard />} />
    </Routes>
  );
}
