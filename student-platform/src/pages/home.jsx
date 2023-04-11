import React from "react";
import Logo from "../layout/logo";

export default function Home() {
  return (
    <div dir="rtl" className="w-full h-screen bg-brandSoftBrown p-8">
        <Logo />
        <div className="mt-16">
        <p className="mb-8 text-gray-600 text-2xl font-bold m-auto text-center">السنة الخامسة ابتدائي</p>
        <div className="gap-8 grid place-items-center sm:flex sm:items-center sm:justify-center sm:gap-28">
            <img src="/images/algebra-small-size.svg" alt="algebra" className="cursor-pointer sm:hidden w-3/5"/>
            <img src="/images/geometry-small-size.svg" alt="geometry" className="cursor-pointer sm:hidden w-3/5"/>
            <img src="/images/algebra-big-size.svg" alt="algebra" className="hidden cursor-pointer  sm:block w-1/5"/>
            <img src="/images/geometry-big-size.svg" alt="geometry" className="hidden cursor-pointer  sm:block w-1/5"/>
        </div>
        </div>
    </div>
  );
}
