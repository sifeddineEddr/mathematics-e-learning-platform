import React from "react";
import Button from "../components/button";
import Logo from "../layout/logo";
import { useNavigate } from "react-router-dom";

export default function Landing() {
  const navigate = useNavigate();
  return (
    <div dir="rtl" className="w-full h-screen bg-brandSoftBrown p-8">
      <Logo />
      <div className="mt-8 flex flex-col items-center lg:flex-row-reverse">
        <img
          className="sm:w-1/2"
          src="/images/landing-animation.gif"
          alt="animation"
        />
        <div className="flex flex-col items-center gap-16">
          <p className="text-gray-600 text-4xl text-center font-bold w-3/4 sm:text-5xl">
            تعلم الرياضيات بأسلوب حديث ومتميز
          </p>
          <Button value="فضاء التلميذ" event={() => navigate('/login')} />
        </div>
      </div>
    </div>
  );
}
