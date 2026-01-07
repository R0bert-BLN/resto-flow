import {Button} from "@/components/ui/button.tsx";
import {Menu} from "lucide-react";
import {useSidebar} from "@/components/ui/sidebar.tsx";
import {useLocation} from "@tanstack/react-router";

export function AdminSidebarTrigger() {
  const {toggleSidebar} = useSidebar();
  const location = useLocation();

  const getPageTitle = (pathname: string): string => {
    const title = pathname.split('/').filter(Boolean)[1];
    return title.charAt(0).toUpperCase() + title.slice(1)
  }

  return (
    <div className="flex items-center gap-2 pt-4">
      <Button
        className="bg-red-600 hover:bg-red-500 cursor-pointer text-zinc-900 rounded-lg w-12 h-7"
        onClick={toggleSidebar}
      >
        <Menu/>
      </Button>

      <h2 className="text-[1.4rem] font-bold text-zinc-900 tracking-wide">{getPageTitle(location.pathname)}</h2>
    </div>
  )
}
