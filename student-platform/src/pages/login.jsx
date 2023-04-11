import React from 'react';
import Button from '../components/button';
import Logo from '../layout/logo';

export function Login () {
    return (
        <div dir="rtl" className="w-full h-screen bg-brandSoftBrown p-8">
          <Logo />
          <div className="m-16 pt-12">
            <h1 className="text-center text-gray-600 text-3xl font-bold mb-20">
              تسجيل الدخول
            </h1>
            <form
              method="post"
              // onSubmit={}
              action="#"
            >
              <table className="flex flex-col gap-8 grid place-items-center">
                <tr className="flex items-center gap-8">
                  <td>
                    <img src="/images/login.svg" alt="login" className="w-3/4" />
                  </td>
                  <td>
                    <input
                      className="px-8 py-2 rounded rounded-full"
                      type="text"
                      name="login"
                      placeholder="رقم مسار"
                      value=""
                    />
                  </td>
                </tr>
                <tr className="flex items-center gap-8">
                  <td>
                    <img src="/images/pwd.svg" alt="pwd" className="w-3/4" />
                  </td>
                  <td>
                    <input
                      className="px-8 py-2 rounded rounded-full"
                      type="password"
                      name="pwd"
                      placeholder="الرمز السري"
                      value=""
                    />
                  </td>
                </tr>
              </table>
              <div className="mt-16 mr-16 grid place-items-center">
                <Button value="دخول" event={() => console.log("")} />
              </div>
            </form>
          </div>
        </div>
      );
}