import { createFileRoute } from '@tanstack/react-router'

export const Route = createFileRoute('/_tenant/admin/staff')({
  component: StaffPage,
})

function StaffPage() {
  return <div className="font-semibold text-lg">Staff Page</div>
}
