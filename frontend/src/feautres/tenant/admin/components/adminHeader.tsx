import type {JSX} from "react";
import {Avatar, AvatarFallback, AvatarImage} from "@/components/ui/avatar.tsx";
import {LogOut, UserRound} from "lucide-react";
import {Button} from "@/components/ui/button.tsx";
import {useLogout} from "@/feautres/auth/login/hooks/useLogout.ts";

export function AdminHeader(): JSX.Element {
  // TODO: Add avatar dropdown
  const {mutate: logout} = useLogout();

  return (
    <div className="h-17 bg-zinc-900 flex items-center justify-between px-4 shadow-sm">
      <h2 className="text-[2rem] font-semibold text-red-500">RestoFlow</h2>

      <div className="flex items-center gap-5">
        <Avatar className="h-10 w-10 cursor-pointer">
          <AvatarImage src=""/>
          <AvatarFallback><UserRound/></AvatarFallback>
        </Avatar>

        <Button
          className="bg-red-700 hover:bg-red-600 cursor-pointer text-white rounded-full w-25"
          onClick={() => logout()}
        >
          <LogOut/>
          <span>logout</span>
        </Button>
      </div>
    </div>
  )
}
