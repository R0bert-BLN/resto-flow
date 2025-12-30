import {createFileRoute, Outlet, redirect} from '@tanstack/react-router'
import {isCentralDomain} from "../lib/domain.ts";

export const Route = createFileRoute('/_central')({
  beforeLoad: () => {
    if (!isCentralDomain()) {
      throw redirect({to: '/login'});
    }
  },
  component: RouteComponent,
})

function RouteComponent() {
  return <Outlet/>
}
