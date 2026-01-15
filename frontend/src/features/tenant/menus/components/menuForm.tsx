import {JSX} from "react";
import {useCreateMenu} from "@/features/tenant/menus/hooks/menuMutation.ts";
import {useForm} from "@tanstack/react-form";
import {MenuFormSchema} from "@/features/tenant/menus/schemas/menuSchema.ts";
import {InputField} from "@/components/elements/inputField.tsx";
import {SubmitButton} from "@/components/elements/submitButton.tsx";

interface MenuFormProps {
  closeModal: () => void;
}

export default function MenuForm({closeModal}: MenuFormProps): JSX.Element {
  const {mutate: createMenu, isPending} = useCreateMenu();

  const form = useForm({
    defaultValues: {
      name: "",
      description: "",
    },
    validators: {
      onSubmit: MenuFormSchema,
    },
    onSubmit: async ({value}) => {
      try {
        await createMenu(value);
        closeModal();
      } catch (error) {
        console.error(error);
      }
    }
  })

  return (
    <div className="container px-4">
      <h1 className="text-2xl font-bold text-center text-red-500 pb-12 pt-4">
        Create Menu
      </h1>

      <form
        className="flex flex-col gap-8"
        onSubmit={(event) => {
          event.preventDefault();
          event.stopPropagation();

          form.handleSubmit();
        }}
      >
        <InputField
          name="name"
          label="Name"
          form={form}
          variant="underline"
          type="text"
        />

        <InputField
          name="description"
          label="Description"
          form={form}
          variant="underline"
          type="text"
        />

        <div className="flex justify-end pt-1 pb-4">
          <SubmitButton
            isLoading={isPending}
            form={form}
            label="create"
            className="rounded-md bg-red-600 hover:bg-red-500 text-white font-semibold py-4 text-md cursor-pointer w-22"
          />
        </div>
      </form>
    </div>
  )
}
