import { createFileRoute } from '@tanstack/react-router'

export const Route = createFileRoute('/_tenant/admin/settings')({
  component: SettingsPage,
})

function SettingsPage() {
  return <div className="font-semibold text-lg">Settings Page</div>
}
