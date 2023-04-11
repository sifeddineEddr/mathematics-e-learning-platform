import Button from "./components/button";

function App() {
  return (
    <div dir="rtl" className="w-full h-screen bg-brandSoftBrown p-8">
      <img
        className="absolute left-1/2 -translate-x-1/2 sm:translate-x-0"
        src="/images/logo.svg"
        alt="logo"
      />

      <div className="mt-8 flex flex-col items-center lg:flex-row-reverse">
        <img className="sm:w-1/2" src="/images/landing-animation.gif" alt="animation" />
        <div className="flex flex-col items-center gap-16">
        <p className="text-gray-600 text-4xl text-center font-bold w-3/4 sm:text-5xl">
          تعلم الرياضيات بأسلوب حديث ومتميز
        </p>
          <Button value="فضاء التلميذ" event={() => alert("hi")} />
        </div>
      </div>
    </div>
  );
}

export default App;
