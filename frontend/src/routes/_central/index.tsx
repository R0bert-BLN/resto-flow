import { createFileRoute } from '@tanstack/react-router'

export const Route = createFileRoute('/_central/')({
  component: LandingPage,
})

function LandingPage() {
  return <div>Landing Page</div>
}
