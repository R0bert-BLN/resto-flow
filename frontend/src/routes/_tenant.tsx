import {createFileRoute, Outlet, redirect} from '@tanstack/react-router'
import {isCentralDomain} from "../lib/domain.ts";
import {validateCurrentTenant} from "../lib/tenant.ts";

export const Route = createFileRoute('/_tenant')({
  beforeLoad: async () => {
    if (isCentralDomain()) {
      throw redirect({to: '/'});
    }

    const exists = await validateCurrentTenant();

    if (!exists) {
      throw new Error('TenantNotFound');
    }
  },
  component: RouteComponent,
  errorComponent: ({error}) => {
    if (error.message === 'TenantNotFound') {
      return (
        <div>
          <h1>404</h1>
          <p>Tenant not found</p>
        </div>
      )
    }

    return <div>An unexpected error occurred</div>
  }
})

function RouteComponent() {
  return <Outlet/>
}
