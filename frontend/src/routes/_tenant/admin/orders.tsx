import { createFileRoute } from '@tanstack/react-router'

export const Route = createFileRoute('/_tenant/admin/orders')({
  component: OrdersPage,
})

function OrdersPage() {
  return <div className="font-semibold text-lg">Orders Page</div>
}
