import { createFileRoute } from '@tanstack/react-router'

export const Route = createFileRoute('/_tenant/login')({
  component: LoginPage,
})

function LoginPage() {
  return <div>Login page</div>
}
