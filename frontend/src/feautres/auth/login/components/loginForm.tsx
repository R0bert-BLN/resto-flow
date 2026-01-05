import type {JSX} from "react";
import {useLogin} from "@/feautres/auth/login/hooks/useLogin.ts";
import {useForm} from "@tanstack/react-form";
import {LoginSchema} from "@/feautres/auth/login/schemas/loginSchema.ts";
import {InputField} from "@/components/elements/inputField.tsx";
import {SubmitButton} from "@/components/elements/submitButton.tsx";

export function LoginForm(): JSX.Element  {
  const {mutate: login, isPending} = useLogin();

  const form = useForm({
    defaultValues: {
      email: '',
      password: ''
    },
    validators: {
      onSubmit: LoginSchema,
    },
    onSubmit: async ({value}) => {
      login(value);
    }
  })

  return (
    <div className="bg-white p-10 rounded-lg shadow-xl w-full max-w-sm mx-auto border border-gray-100">

      <h1 className="text-3xl font-bold text-center text-red-500 pb-10 ">
        Login
      </h1>

      <form
        onSubmit={(e) => {
          e.preventDefault();
          e.stopPropagation();
          form.handleSubmit();
        }}
        className="flex flex-col gap-8"
      >
        <InputField
          name="email"
          label="Email"
          form={form}
          variant="underline"
          type="email"
        />

        <InputField
          name="password"
          label="Password"
          form={form}
          variant="underline"
          type="password"
        />

        <div className="text-[0.8rem] text-gray-500 pt-2">
          Need help? Please click <span className="text-red-500 hover:underline cursor-pointer">here</span>
        </div>

        <SubmitButton
          isLoading={isPending}
          form={form}
          label="sign in"
          className="w-full rounded-full bg-red-600 hover:bg-red-500 text-white font-semibold py-4 text-md cursor-pointer"
        />
      </form>
    </div>
  );
}
