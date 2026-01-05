import { createFileRoute } from '@tanstack/react-router'

export const Route = createFileRoute('/_tenant/admin/tables')({
  component: TablesPage,
})

function TablesPage() {
  return <div className="font-semibold text-lg">Tables Page</div>
}
