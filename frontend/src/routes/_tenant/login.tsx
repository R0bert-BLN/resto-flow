import { createFileRoute } from '@tanstack/react-router'
import {LoginForm} from "@/features/auth/login/components/loginForm.tsx";

export const Route = createFileRoute('/_tenant/login')({
  component: LoginPage,
})

function LoginPage() {
  return (
    <div className="flex min-h-screen w-full justify-center items-center">
      <LoginForm/>
    </div>
  )
}
