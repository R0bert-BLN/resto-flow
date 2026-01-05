import type {InputHTMLAttributes, JSX} from "react";
import {cva, type VariantProps} from "class-variance-authority";
import {Label} from "@/components/ui/label.tsx";
import {cn} from "@/lib/utils.ts";
import {Input} from "@/components/ui/input.tsx";

const inputVariants = cva(
  "transition-all",
  {
    variants: {
      variant: {
        default: "border-input rounded-md focus-visible:ring-2 focus-visible:ring-ring",
        underline: "border-0 border-b-2 border-gray-300 rounded-none px-0 shadow-none focus-visible:ring-0 bg-transparent",
      },
      error:{
        true: "border-red-500 focus-visible:border-red-600 focus-visible:ring-red-500",
        false: ""
      }
    },
    compoundVariants: [
      {
        variant: "underline",
        error: false,
        class: "focus-visible:border-red-500"
      }
    ],
    defaultVariants: {
      variant: "default",
      error: false
    }
  }
)

// TODO: Get rid of any
interface InputFiledProps extends Omit<InputHTMLAttributes<HTMLInputElement>, "form">, VariantProps<typeof inputVariants> {
  name: string;
  label: string,
  form: any;
}

export function InputField({
  label,
  name,
  form,
  variant = "default",
  className,
  ...props
}: InputFiledProps): JSX.Element {
  return (
    <form.Field
      name={name}
      children={(field: any) => {
        const hasErrors = field.state.meta.errors.length > 0;

        return (
          <div className="group relative w-full">
            <Label
              htmlFor={field.name}
              className={cn(
                "text-[1rem] font-semibold block transition-colors",
                hasErrors ? "text-red-500" : "text-gray-500",
              )}
            >
              {label}
            </Label>

            <Input
              id={field.name}
              name={field.name}
              value={field.state.value}
              onBlur={field.handleBlur}
              onChange={(e) => field.handleChange(e.target.value)}
              className={cn(
                inputVariants({ variant, error: hasErrors }),
                className
              )}
              {...props}
            />

            {hasErrors && (
              <p className="text-xs text-red-500 pt-1 absolute animate-in slide-in-from-top-1 fade-in">
                {field.state.meta.errors[0]?.message}
              </p>
            )}
          </div>
        )
      }}
    />
  );
}
