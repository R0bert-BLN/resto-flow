import {Button, buttonVariants} from "@/components/ui/button";
import {Spinner} from "@/components/ui/spinner";
import type {VariantProps} from "class-variance-authority";
import * as React from "react";
import type {JSX} from "react";
import {cn} from "@/lib/utils";

interface SubmitButtonProps extends VariantProps<typeof buttonVariants>, React.ComponentProps<"button"> {
  form: any;
  label: string;
  isLoading?: boolean;
}

export function SubmitButton({
  form,
  label,
  isLoading,
  variant = "default",
  className,
  ...props
}: SubmitButtonProps): JSX.Element {
  return (
    <form.Subscribe
      selector={(state: any) => [state.canSubmit, state.isSubmitting]}
      children={() => (
        <Button
          type="submit"
          disabled={isLoading}
          variant={variant}
          className={cn(className)}
          {...props}
        >
          {isLoading ? (
            <Spinner className="size-5 text-white"/>
          ) : (
            <span>{label}</span>
          )}
        </Button>
      )}
    />
  )
}
