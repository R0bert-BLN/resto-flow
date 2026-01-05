import { createFileRoute } from '@tanstack/react-router'

export const Route = createFileRoute('/_tenant/admin/menu')({
  component: MenuPage,
})

function MenuPage() {
  return <div className="font-semibold text-lg">Menu Page</div>
}
