import {StrictMode} from 'react'
import {createRoot} from 'react-dom/client'
import './index.css'
import {createRouter, RouterProvider} from "@tanstack/react-router";
import {routeTree} from "./routeTree.gen.ts";
import {QueryClient, QueryClientProvider} from "@tanstack/react-query";
import {useGetAuthUser} from "@/feautres/auth/login/hooks/useGetAuthUser.ts";

const queryClient = new QueryClient();

const router = createRouter({
  routeTree,
  context: {
    queryClient,
    auth: undefined!,
  }
});

declare module '@tanstack/react-router' {
  interface Register {
    router: typeof router;
  }
}

function App() {
  const auth = useGetAuthUser();

  return <RouterProvider router={router} context={{auth, queryClient}}/>
}

createRoot(document.getElementById('root')!).render(
  <StrictMode>
    <QueryClientProvider client={queryClient}>
      <App/>
    </QueryClientProvider>
  </StrictMode>,
)
