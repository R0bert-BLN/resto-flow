import { createFileRoute } from '@tanstack/react-router'

export const Route = createFileRoute('/_tenant/admin/dashboard')({
  component: DashboardPage,
})

function DashboardPage() {
  return <div className="font-semibold text-lg">Dashboard Page</div>
}
